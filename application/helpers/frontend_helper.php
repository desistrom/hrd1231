<?php
/*
 * @Age
 */
if(!function_exists("age"))
{
    function age($birthDate)
    {
        //explode the date to get month, day and year
        $birthDate = explode("-", $birthDate);
        //get age from date or birthdate
        $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[2], $birthDate[0]))) > date("md") ? ((date("Y")-$birthDate[0])-1):(date("Y")-$birthDate[0]));

        return $age;
    }
}


/*
 * @Url Youtube
 */
if(!function_exists("parse_url_youtube"))
{
    function parse_url_youtube($url,$key)
    {
        //$url = 'http://www.youtube.com/watch?v=Z29MkJdMKqs&feature=grec_index';

        // break the URL into its components
        $parts = parse_url($url);

        // $parts['query'] contains the query string: 'v=Z29MkJdMKqs&feature=grec_index'

        // parse variables into key=>value array
        $query = array();
        parse_str($parts['query'], $query);

        //echo $query['v']; // Z29MkJdMKqs
        //echo $query['feature'] ;// grec_index

        return $query[$key];
    }
}

/*
 * Date format
 */
if(!function_exists("date_now"))
{
    function date_now($time=false)
    {
        date_default_timezone_set('UTC');
        if($time){
            return date('Y-m-d H:i:s');
        }else {
           return date('Y-m-d');
        }
    }
}

if(!function_exists("date_yesterday"))
{
    function date_yesterday($time=false)
    {
        date_default_timezone_set('UTC');
        if($time){
            return date('Y-m-d H:i:s',strtotime("-1 days"));
        }else {
           return date('Y-m-d',strtotime("-1 days"));
        }
    }
}


if(!function_exists("date_now_ymd"))
{
    function date_now_ymd($time=false)
    {
        date_default_timezone_set('UTC');
        if($time){
            return date('Y-m-d H:i:s');
        }else {
           return date('Y-m-d');
        }
    }
}

if(!function_exists("format_date"))
{
    function format_date($date,$format = 'F d, Y')
    {
        $return = '';
        if(!empty($date)){
            $date = new DateTime($date);
            $return .=$date->format($format);
        }
        return $return;
    }
}

/*
 * Config Setting
 */
if(!function_exists("_xml"))
{
    function _xml($id = '')
    {
    	$CI =& get_instance();

        return $CI->config->item($id);
    }
}

/*
 * Membership login
 */
if(!function_exists("is_membership"))
{
    function is_membership()
    {
        $CI =& get_instance();
        $is_logged_in = $CI->session->userdata('is_logged_in');
        
        return $v = isset($is_logged_in) ? $is_logged_in : false;
    }
}

if(!function_exists("user_id"))
{
    function user_id()
    {
        $CI =& get_instance();
        $user_id = $CI->session->userdata('user_id');

        return $v = isset($user_id) ? $user_id : 0;
    }
}

if(!function_exists('fullname'))
{
    function fullname()
    {
        $CI =& get_instance();
        $fullname = $CI->session->userdata('full_name');
        
        return $v = isset($fullname) ? $fullname : 0;
    }
} 

if(!function_exists('lastlogin'))
{
    function lastlogin()
    {
        $CI =& get_instance();
        $lastlogin = $CI->session->userdata('lastlogin');
        
        return $v = isset($lastlogin) ? $lastlogin : 0;
    }
} 

if(!function_exists('rule'))
{
    function rule()
    {
        $CI =& get_instance();
        $rule = $CI->session->userdata('rule');
        
        return $v = isset($rule) ? $rule : 0;
    }
}

if(!function_exists('privilege'))
{
    function privilege($module='')
    {
        $data = array(
            'setting' => '1,2,3',
            'user' => '1,2,3',
            'project' => '1,2,3'
        );
    }
}

/*
 * Format tanggal indonesia
 */
if(!function_exists("format_date_ID"))
{
    function format_date_ID($date = null,$time=false)
    {
        $curentdate = date('Y',time()) ."-". date('m',time())."-". date('d',time());
        $date = empty($date) ? $curentdate : $date;

        $date = new DateTime($date);

        $day = $date->format("j");
        $month = $date->format("n");
        $year = $date->format("Y");

        $days = date("w",mktime(0,0,0,$month,$day,$year));

        $out = DayID($days).', ';
        $out .= $day.' ';
        $out .= MonthID($month).' ';
        $out .= $year;
        if($time){
            $out .= ' / '.$date->format('g:i A');
        }

        return $out;
    }

    function DayID($day = 0)
    {
        $strDay = "";
        switch($day){
            case 0:$strDay = "Minggu";break;
            case 1:$strDay = "Senin";break;
            case 2:$strDay = "Selasa";break;
            case 3:$strDay = "Rabu";break;
            case 4:$strDay = "Kamis";break;
            case 5:$strDay = "Jumat";break;
            case 6:$strDay = "Sabtu";break;
        };

        return $strDay;
    }

    function MonthID($m = 0)
    {
        $strMonth = "";
        switch($m){
            case 1:$strMonth = "Januari";break;
            case 2:$strMonth = "Februari";break;
            case 3:$strMonth = "Maret";break;
            case 4:$strMonth = "April";break;
            case 5:$strMonth = "Mei";break;
            case 6:$strMonth = "Juni";break;
            case 7:$strMonth = "Juli";break;
            case 8:$strMonth = "Agustus";break;
            case 9:$strMonth = "September";break;
            case 10:$strMonth = "Oktober";break;
            case 11:$strMonth = "November";break;
            case 12:$strMonth = "Desember";break;
        };

        return $strMonth;
    }
}

/*
 * Penghitungan waktu berdasarkan UTC / GMT
 */
if(!function_exists("date_utc"))
{
    function date_utc($date)
    {
        $date = date("Y-m-d H:i:s", strtotime('+'._xml('utc_id').' hours', strtotime($date)));

        return $date;
    }
}

if(!function_exists("date_utc_ymd"))
{
    function date_utc_ymd($date)
    {
        $date = date("Y-m-d", strtotime('+'._xml('utc_id').' hours', strtotime($date)));

        return $date;
    }
}

/*
 * Total notification yang belum dibaca
 */
if(!function_exists("unread"))
{
    function unread()
    {
        $CI =& get_instance();
        $CI->load->model('notification_mod');
        $where = array('user_id' =>  user_id(),"is_read='0'" => NULL);

        $notifications = $CI->notification_mod->get_notifications(true,$where);

        return $notifications;
    }
}

if(!function_exists("get_rule"))
{
    function get_rule($type='rule_client')
    {
        /*
        * Categori untuk type User
        * var $rule_administrator = 1;
        * var $rule_hrd = 2;
        * var $rule_team = 3;
        * var $rule_client = 4;
        */
        $CI =& get_instance();
        $CI->load->model('user_mod');

        return $CI->user_mod->$type;
    }
}

/*
 * Config Setting Database
 */
if(!function_exists("setting"))
{
    function setting($key = '')
    {
    	$CI =& get_instance();
        $CI->load->model('setting_mod');

        $value = $CI->setting_mod->get_value($key);
        return $value;
    }
}

if(!function_exists("kpnpush"))
{
    function kpnpush($id = '')
    {
    	$CI =& get_instance();
        $CI->load->model('tglpush_mod');

        $value = $CI->tglpush_mod->get_value($id);
        return $value;


    }
}

if(!function_exists("set_link_url"))
{
    function set_link_url($val = '')
    {
        $value = "";
        if(!empty($val))
        {
            $data_br = explode("<br />", nl2br($val));
            if(count($data_br))
            {
                $data_per_br = array();
                foreach ($data_br as $br)
                {
                    $data_kata = explode(" ", $br);
                    $data_per_kata = array();
                    if(count($data_kata))
                    {
                        foreach ($data_kata as $r)
                        {
                            if(contains($r,'https') or contains($r,'http')){
                                $data_per_kata[] = '<a href="'.$r.'" target="_blank">'.$r.'</a>';
                            }else{
                                $data_per_kata[] = $r; 
                            }
                        }
                    }
                    $data_per_br[] = implode(" ", $data_per_kata);
                }
                $value = implode("<br />", $data_per_br);
            }
        }
        
        //return $val;
        return $value;
    }
}

if(!function_exists("contains"))
{
    function contains($data,$value)
    {
        if (strpos($data,$value) !== false)
            return true;
        else
            return false;
    }
}

if(!function_exists("jumlah_projek"))
{
    function jumlah_projek($id = '')
    {
    	$CI =& get_instance();
        $CI->load->model('dashboard_mod');

        $value = $CI->dashboard_mod->get_count_project($id);
        return $value;


    }
}

if(!function_exists("jumlah_projek_y"))
{
    function jumlah_projek_y($id = '')
    {
    	$CI =& get_instance();
        $CI->load->model('dashboard_mod');

        $value = $CI->dashboard_mod->get_count_project_y($id);
        return $value;


    }
}

if(!function_exists("jumlah_punchin_y"))
{
    function jumlah_punchin_y($id = '')
    {
    	$CI =& get_instance();
        $CI->load->model('dashboard_mod');

        $value = $CI->dashboard_mod->get_count_punchin_y($id);
        return $value;


    }
}

if(!function_exists("jumlah_sakit_y"))
{
    function jumlah_sakit_y($id = '')
    {
    	$CI =& get_instance();
        $CI->load->model('dashboard_mod');

        $value = $CI->dashboard_mod->get_count_sakit_y($id);
        return $value;


    }
}

if(!function_exists("jumlah_cuti_y"))
{
    function jumlah_cuti_y($id = '')
    {
    	$CI =& get_instance();
        $CI->load->model('dashboard_mod');

        $value = $CI->dashboard_mod->get_count_cuti_y($id);
        return $value;


    }
}

if(!function_exists("jumlah_izin_y"))
{
    function jumlah_izin_y($id = '')
    {
    	$CI =& get_instance();
        $CI->load->model('dashboard_mod');

        $value = $CI->dashboard_mod->get_count_izin_y($id);
        return $value;


    }
}

if(!function_exists("jumlah_tugas_y"))
{
    function jumlah_tugas_y($id = '')
    {
    	$CI =& get_instance();
        $CI->load->model('dashboard_mod');

        $value = $CI->dashboard_mod->get_count_tugas_y($id);
        return $value;


    }
}

// NOTIF PENDING

if(!function_exists("jumlah_cuti_pending"))
{
    function jumlah_cuti_pending()
    {
    	$CI =& get_instance();
        $CI->load->model('dashboard_mod');

        $value = $CI->dashboard_mod->get_count_cuti_pending();
        return $value;


    }
}

if(!function_exists("jumlah_izin_pending"))
{
    function jumlah_izin_pending()
    {
    	$CI =& get_instance();
        $CI->load->model('dashboard_mod');

        $value = $CI->dashboard_mod->get_count_izin_pending();
        return $value;


    }
}

if(!function_exists("jumlah_tugas_pending"))
{
    function jumlah_tugas_pending()
    {
    	$CI =& get_instance();
        $CI->load->model('dashboard_mod');

        $value = $CI->dashboard_mod->get_count_tugas_pending();
        return $value;


    }
}

if(!function_exists("tanggalMerah"))
{
    function tanggalMerah($value = '')
    {
    	$array = json_decode(file_get_contents("https://raw.githubusercontent.com/guangrei/Json-Indonesia-holidays/master/calendar.json"),true);
        
        //check tanggal merah berdasarkan libur nasional
        if(isset($array[$value])):
            return "<span>Tanggal Merah ".$array[$value]["deskripsi"]."</span>";

        //check tanggal merah berdasarkan hari minggu
        elseif(date("D",strtotime($value))==="Sun"):

            $valueMinggu = "Tanggal Merah Hari Minggu";
            return $valueMinggu;		 
            
        elseif(date("D",strtotime($value))==="Sat"):		
            return "Tanggal Merah Hari Sabtu";

        //bukan tanggal merah
        else:

            $value = "bukan tanggal merah";
            return $value;

        endif;


    }
}