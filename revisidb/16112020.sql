ALTER TABLE `ds_izin` ADD `start_time` TIME NULL DEFAULT NULL AFTER `tanggal_akhir`, ADD `end_time` TIME NULL DEFAULT NULL AFTER `start_time`;