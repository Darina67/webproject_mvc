<?

class CabinetModel extends Model
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
}
