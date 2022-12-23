<?

class ProductsModel extends Model
{
    public function getData()
    {
        $qr = "SELECT * FROM data";
        $stmt = $this->db->prepare($qr);
        $stmt->execute();
        $res = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function addNewData($newSurname, $newSite, $newPhone, $newCountry, $newStatus)
    {
        $qr = "INSERT INTO `data` ( `surname`, `site`, `phone`, `country`, `status`) VALUES ( ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($qr);
        $stmt->execute([$newSurname, $newSite, $newPhone, $newCountry, $newStatus]);
        // header("Location: /cabinet/gallery");
    }
}
