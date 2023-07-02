<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['mp4Dosyasi'])) {
    $mp4Dosyasi = $_FILES['mp4Dosyasi'];
    
    // Dönüştürülen AVI dosyasının yolu ve dosya adını belirtin
    $aviDosyaYolu = 'path/to/output.avi';
    
    // FFmpeg kullanarak MP4'ü AVI'ye dönüştürün
    exec("ffmpeg -i {$mp4Dosyasi['tmp_name']} {$aviDosyaYolu}");
    
    // Dönüştürülen AVI dosyası için indirme bağlantısı sağlayın
    echo "Dönüşüm tamamlandı. <a href='{$aviDosyaYolu}' download>AVI'yi İndir</a>";
}
?>
