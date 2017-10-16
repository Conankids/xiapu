<?php
/**
 * Created by PhpStorm.
 * User: jiangzg
 * Date: 2017/10/10
 * Time: 下午1:39
 */
ini_set('display_errors',1);
error_reporting(E_ALL);


$handel = opendir('footer');

$data = array();
$data2 = array();

while ($file = readdir($handel) ){
    if($file=='.'||$file=='..'){
        continue;
    }
    preg_match('/^(\d*)\—\—(.*)/i',$file,$match);
    $content = file_get_contents('footer/'.$match[0]);
    file_put_contents('footer_h/'.$match[1].'.jpg',$content);
    chmod('footer_h/'.$match[1].'.jpg',7777);
    $data[] = array(
        'title' => $match[2],
        'url' => 'http://www.jiguo.com/article/article/'.$match[1].'.html',
        'cover' => 'Cover'.$match[1],
    );
    $data2[] = 'import Cover'.$match[1].' from "../style/footer_h/'.$match[1].'.jpg";'.PHP_EOL;
}
closedir($handel);

echo json_encode($data);

//echo implode('',$data2);








