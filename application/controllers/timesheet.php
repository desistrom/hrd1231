<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Timesheet extends MY_Controller {



    function Timesheet()

    {

        parent::__construct();

        $this->load->model('user_mod');

        $this->load->model('today_mod');

        $this->clear_cache();

        

        /*$this->is_logged_in();

        #Ini hanya untuk team DS

        if(rule() == get_rule()){

            $this->_redirect_member();

        }*/

    }


    function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }


    function index()

    {

        $url = '';

        $search = $this->input->get('search');

        $supervise = $this->input->get('supervise');

        $per_page = $this->input->get('per_page');

        $field = $this->input->get('field');

        $sort = $this->input->get('sort');

        $sort_data = false;

        $url_sort = array();



        $where = array();

        $where["ds_today.user_id"] = user_id();

        if($supervise > 0){

            $rows = $this->user_mod->get_maps(true,array('user_id'=>  user_id(),'child_id'=>$supervise));

            if($rows){

                $where["ds_today.user_id"] = $supervise;

                $url .= 'supervise='.$supervise;

                $url_sort['supervise'] = $supervise;

            }

        }

        if(!empty($search)){

            $where["ds_today.punch_date like '%".  mysql_real_escape_string($search)."%'"] = NULL;

            $url .= empty($url) ? '' : '&';

            $url .= 'search='.$search;

            $url_sort['search'] = $search;

        }

        if(!empty($field) && !empty($sort)){

            $sort = ($sort=='asc') ? 'asc' : 'desc';

            $sort_data = array(

                'field' => $field,

                'sort' => $sort

            );

            $url .= empty($url) ? '' : '&';

            $url .= 'field='.$field.'&sort='.$sort;

        }

        

        $this->load->library('pagination');

        $config['base_url'] = base_url().'timesheet?'.$url;

        $config['total_rows'] = $this->today_mod->get_today(true,$where);

        $config['per_page'] = 25;

        $config['cur_page'] = empty($per_page) ? 0 : $per_page;

        $config['page_query_string'] = TRUE;

        $config['next_link'] = 'Next »';

        $config['prev_link'] = '« Prev';

        $config['next_tag_open'] = '<li>';

        $config['next_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li>';

        $config['prev_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li>';

        $config['num_tag_close'] = '</li>';

        $config['first_tag_open'] = '<li>';

        $config['first_tag_close'] = '</li>';

        $config['last_tag_open'] = '<li>';

        $config['last_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a href="#">';

        $config['cur_tag_close'] = '</a></li>';

        $this->pagination->initialize($config);



        $skip = $config['cur_page'];

        $take = $config['per_page'];



        if(empty($url))

            $data['pagination'] = str_replace("&amp;", "", $this->pagination->create_links());

        else

            $data['pagination'] = $this->pagination->create_links();



        $data['maps'] = $this->user_mod->get_maps(false,array('user_id'=>  user_id()));

        $data['supervise'] = $supervise;

        $data['rows'] = $this->today_mod->get_today(false,$where,true,$skip,$take,$sort_data);

        $data['update_date'] = $this->last_date();

        $data['page'] = 'timesheet';

        $data['url_sort'] = $url_sort;

        $this->load->view('timesheet',$data);

    }

    

    function edit($punch_date=NULL)

    {

        #Cek data report

        $row = $this->today_mod->get(user_id(),$punch_date);

        if(!$row){

            redirect('timesheet');

        }

        

        #Cek tanggal report

        if($row->punch_date < $this->last_date()){

            redirect('timesheet');

        }

        

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger error">', '</div>');

        $this->form_validation->set_rules('report', 'Report', 'required');



        $data["msg"] = '';

        if ($this->form_validation->run() == TRUE)

        {

            $report = $this->input->post('report');



            $data_update = array(

                'report' => $report

            );

            $this->today_mod->update($data_update,$row->id);



            redirect('timesheet');

        }



        $data['row'] = $row;

        $data['page'] = 'timesheet';

        $this->load->view('timesheet_edit',$data);

    }

    

    function print_monthly($user_id=0)

    {

        $user = $this->user_mod->get_byuid(user_id());

        if($user_id > 0){

            #Cek rule akses

            if(!$this->is_filter_rule()){

                $user = $this->user_mod->get_byuid($user_id);

                if(!$user){

                    redirect('account');

                }

            }

        }

        

        if(!$user){

            redirect('logout');

        }

        

        $first_date = setting('first_date');

        $last_date = setting('last_date');

        $now = date_now(true);

        $now_id = date_utc($now);

        $month = format_date($now_id, "m");

        $year = format_date($now_id, "Y");

        

        $last_date = $year.'-'.$month.'-'.$last_date;

        $first_date = date("Y-m", strtotime('-1 month', strtotime($now_id))).'-'.$first_date;

        

        $where = array();

        $where["ds_today.user_id"] = $user->id;

        $where["ds_today.punch_date >= '".$first_date."'"] = NULL;

        $where["ds_today.punch_date <= '".$last_date."'"] = NULL;



        $data['first_date'] = $first_date;

        $data['last_date'] = $last_date;

        $data['user'] = $user;

        $data['rows'] = $this->today_mod->get_today(false,$where);

        $this->load->view('timesheet_print',$data);

    }

    

    private function last_date()

    {

        $last_day = setting('last_day');

        $now = date_now(true);

        $now_id = date_utc($now);

        $now_date = format_date($now_id, "Y-m-d");

        if($last_day > 0){

            $now_date = date("Y-m-d", strtotime('-'.$last_day.' day', strtotime($now_id)));

        }

        return $now_date;

    }

    

    function day($datestart,$dateend)

    {

        $row = '';

        $row2 = '';

        while ($datestart <= $dateend) {

          $dateExpl=explode("-",$datestart);

          $dayname=date("D", strtotime($datestart));

          $row.="<td>" . $dateExpl[2] . "</td>";

          $row2.="<td>" . $dayname . "</td>";

          $datestart=date('Y-m-d', strtotime('+1 day', strtotime($datestart)));

        }

        return "<table><tr>" . $row . "</tr><tr>" . $row2 . "</tr></table>";

    }

    

    function get_day()

    {

        $datestart = '2014-01-26';

        $dateend = '2014-02-25';

        

        echo $this->day($datestart,$dateend);

    }

}