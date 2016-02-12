<?
function resize ($filename, $size, $quality)
{
    $dir = UPLOADDIR; // Адрес директории для сохранения картинки
    $ext = strtolower(strrchr(basename($filename), ".")); // Получаем формат уменьшаемого изображения
    $extentions = array('.jpg', '.gif', '.png', '.bmp'); // Определяем формат уменьшаемой картинки
        
    if (in_array($ext, $extentions)) {   
        echo '01';   
        $percent = $size; // Ширина изображения миниатюры
    
        list($width, $height) = getimagesize(UPLOADDIR .$filename); // Возвращает ширину и высоту картинки
        $newheight = $height * $percent;
        $newwidth = $newheight / $width; 
    
        $thumb = imagecreatetruecolor($percent, $newwidth);
        switch ($ext) {
            case '.jpg': $source = @imagecreatefromjpeg(UPLOADDIR .$filename); break;
            case '.gif': $source = @imagecreatefromgif(UPLOADDIR .$filename); break;
            case '.png': $source = @imagecreatefrompng(UPLOADDIR .$filename); break;
            case '.bmp': $source = @imagecreatefromwbmp(UPLOADDIR .$filename); break;
        }

        // php уменьшение изображения
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $percent, $newwidth, $width, $height);
            
        // Создаем изображение
        switch ($ext) {
            case '.jpg': imagejpeg($thumb, UPLOADDIR ."min_".$filename, $quality); // Для JPEG картинок
                         break;
                
            case '.gif': imagegif($thumb, UPLOADDIR . $filename); // Для GIF картинки
                         break;
                
            case '.png': imagepng($thumb, UPLOADDIR . $filename, $quality); // Для PNG картинок
                         break;
                
            case '.bmp': imagewbmp($thumb, UPLOADDIR . $filename); // Для BMP картинки
                         break;
            }            
    } else return 'typeError'; 
    
    @imagedestroy($thumb);         
    @imagedestroy($source);  
        
    return $filename;
} 