<?php
interface Media
{
    public function play();
}

class Music implements Media
{
    private $songTitle;

    public function __construct($songTitle)
    {
        $this->songTitle = $songTitle;
    }

    public function play()
    {
        echo "『{$this->songTitle}』を再生中\n";
    }
}

class Video implements Media
{
    private $videoTitle;

    public function __construct($videoTitle)
    {
        $this->videoTitle = $videoTitle;
    }

    public function play()
    {
        echo "『{$this->videoTitle}』を再生中\n";
    }
}

class Podcast implements Media
{
    private $episodeTitle;

    public function __construct($episodeTitle)
    {
        $this->episodeTitle = $episodeTitle;
    }

    public function play()
    {
        echo "ポッドキャストの『{$this->episodeTitle}』を再生中\n";
    }
}

$songTitle = new Music("君が代");
$videoTitle = new Video("W杯決勝");
$episodeTitle = new Podcast("日本の誇り");

$songTitle->play();
$videoTitle->play();
$episodeTitle->play();