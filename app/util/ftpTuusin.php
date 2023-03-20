<?php
date_default_timezone_set('Asia/Tokyo');


function getFtpSecuMaster()
{
  $ftpValue = array(
    'ftp_server' => 'fujii-tst.sakura.ne.jp',
    'ftp_user_name' => 'fujii-tst',
    'ftp_user_pass' => 'Subaru6215'
  );
  $remote_file = 'fujiiTest.txt';
  $download_file = 'fujiiTest.txt';
  
  $connection = ftp_connect($ftpValue['ftp_server']);
  
  $login_result = ftp_login(
    $connection,
    $ftpValue['ftp_user_name'],
    $ftpValue['ftp_user_pass']
  );
  
  //リモートでのファイル存在チェック
  if(ftp_size($connection, $remote_file)){
    ftp_pasv($connection, true);
    $ftpResult = ftp_get($connection, $download_file, $remote_file, FTP_BINARY, false);
  }
  
  if (!$ftpResult) {
    throw new InternalErrorException('Something went wrong.');
  }
  
  ftp_close($connection);
  
  
  // ファイルの読込
  // var_dump(file(__DIR__ . '/fujiiTest.txt'));
}
