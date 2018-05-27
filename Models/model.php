<?php
class model{
    public function update($table,$tochange,$new) {
        $sql = myPDO()->prepare("UPDATE $table($tochange) SET $tochange =:new");
        $params = [
          ':new'=>$new,
        ];
        try {
            $sql->execute($params);
            return true;
        }
        catch (Exception $e) {
            // error during execute (bad request)
            http_response_code(400);
            return false;
        }
    }

    public function delete($table,$ID) {
        $sql = "DELETE FROM $table WHERE id_.$table = :id";
        $req = myPDO()->prepare($sql);
        $params = [
          ':id' => $ID,
        ];
        try {
            $req->execute($params);
            return true;
        }
        catch (Exception $e) {
            // error during execute (bad request)
            http_response_code(400);
            return false;
        }
    }
}