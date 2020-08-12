<?php
//判断是否为移动端
function isMobile(){   
        // 如果有HTTP_X_WAP_PROFILE则一定是移动设备  
        if (isset ($_SERVER['HTTP_X_WAP_PROFILE'])){  
            return TRUE;  
        }  
        // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息  
        if (isset ($_SERVER['HTTP_VIA'])){  
            return stristr($_SERVER['HTTP_VIA'], "wap") ? TRUE : FALSE;// 找不到为flase,否则为TRUE  
        }   
        // 判断手机发送的客户端标志,兼容性有待提高  
        if (isset ($_SERVER['HTTP_USER_AGENT'])) {  
            $clientkeywords = array (  
                'mobile',  
                'nokia',  
                'sony',  
                'ericsson',  
                'mot',  
                'samsung',  
                'htc',  
                'sgh',  
                'lg',  
                'sharp',  
                'sie-',  
                'philips',  
                'panasonic',  
                'alcatel',  
                'lenovo',  
                'iphone',  
                'ipod',  
                'blackberry',  
                'meizu',  
                'android',  
                'netfront',  
                'symbian',  
                'ucweb',  
                'windowsce',  
                'palm',  
                'operamini',  
                'operamobi',  
                'openwave',  
                'nexusone',  
                'cldc',  
                'midp',  
                'wap'  
                );   
            // 从HTTP_USER_AGENT中查找手机浏览器的关键字  
            if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))){  
                return TRUE;  
            }  
        }  
        if (isset ($_SERVER['HTTP_ACCEPT'])){ // 协议法，因为有可能不准确，放到最后判断  
            // 如果只支持wml并且不支持html那一定是移动设备  
            // 如果支持wml和html但是wml在html之前则是移动设备  
            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== FALSE) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === FALSE || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))){  
                return TRUE;  
            }  
        }  
        return FALSE;  
    }  
	

if(!is_file('./Cache/config.php'))header("location: ./Install");
header("Content-type: text/html;charset=utf-8");
ini_set('memory_limit','32M');
error_reporting(E_ERROR | E_WARNING | E_PARSE);


define('UPLOAD_PATH','./Uploads/');
define('VERSION','v2.2 Released');
define('UPDATETIME','20121225');

if(!isMobile()){

define('Ainaphp',true);	
define('APP_NAME', 'Ainaphp');
define('APP_PATH', './Ainaphp/');
   }else{
//define('Mobile',true);
//define('APP_NAME', 'Mobile');
//define('APP_PATH', './Mobile/');  
define('Ainaphp',true);	
define('APP_NAME', 'Ainaphp');
define('APP_PATH', './Ainaphp/');
   }
	


define('APP_LANG', true);
//define('APP_DEBUG',false);// 关闭调试模式
define('APP_DEBUG', true); // 开启调试模式
define('THINK_PATH','./Core/');
require(THINK_PATH.'Core.php');
?>
