<?php
class Jukebox {
    private $cds = []; // خاصية تمثل مجموعة الأغاني
    private $coinInserted = false; // خاصية بتقول إذا تم إدخال العملة

    // دالة لإدخال العملة
    public function insertCoin() {
        $this->coinInserted = true;
        echo "Coin inserted\n";
    }

    // دالة لإضافة أغنية
    public function addCD($cd) {
        $this->cds[] = $cd;
    }

    // دالة لتشغيل الأغنية
    public function play($trackNumber) {
        if (!$this->coinInserted) {
            echo "Please insert coin first!\n";
            return;
        }

        if (isset($this->cds[$trackNumber])) {
            echo "Now playing: " . $this->cds[$trackNumber] . "\n";
            $this->coinInserted = false;
        } else {
            echo "Track not found\n";
        }
    }
}

$jukebox = new Jukebox();
$jukebox->addCD("Song A");
$jukebox->addCD("Song B");

$jukebox->play(0); // هيقولك دخل العملة الأول
$jukebox->insertCoin();
$jukebox->play(0); // يشغّل الأغنية
?>
