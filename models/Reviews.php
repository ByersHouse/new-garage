<?php
class Reviews extends Model
{


    static function formRate($rate){
        $star = '';
        $i = $rate;

        for($rate; $rate >= 1; $rate--){
            $star .= '  <i class="star star--full"></i>';
        }
        for($i; $i < 5; $i++){
           $star .= ' <i class="star star--o"></i>';
        }
        return '<span class="revOne__textRate">' . $star . '</span>';

    }



    static function formatDate($date)
    {
        $r = explode(" ", $date);
        $ymd = $r[0];
        $hms = $r[1];

        $r2 = explode("-", $ymd);
        $year = $r2[0];
        $month = $r2[1];
        $day = $r2[2];


        $array = [
          '01' => 'января',
          '02' => 'февраля',
          '03' => 'марта',
          '04' => 'апреля',
          '05' => 'мая',
          '06' => 'июня',
          '07' => 'июля',
          '08' => 'августа',
          '09' => 'сентября',
          '10' => 'октября',
          '11' => 'ноября',
          '12' => 'декабря',
        ];

        $textm = $array[$month];
        return $day . ' ' . $textm . ' ' . $year;
    }

    public function getTotalReviews()
    {
        $dbh = $this->db;
        $query = "SELECT COUNT(*) FROM reviews WHERE status = 1";
        $q = $dbh->prepare($query);
        $q->execute();
        $r = $q->fetch();

        return $r[0];
    }

    public function getAllReviews($page = 1, $limit = 6, $order = 'id'){
        $offset = ($page - 1) * $limit;
        $db = $this->db;
        $result = $db->query('SELECT * FROM reviews WHERE status = 1 ORDER by '.$order.' LIMIT '.$limit .' OFFSET ' . $offset);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }



}