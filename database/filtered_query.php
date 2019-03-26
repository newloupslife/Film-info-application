<?php


final class filtered_query
{
    private $sql = 'SELECT * FROM ';
    public function sql($table,$asc='',$by='',$text='')
    {
        $this->table($table);
        $this->where($by,$text);
        $this->order($asc);
        $this->sql .= ';';
        return $this->sql;
    }

    private function where($by,$text)
    {
        if($by == ''){
            return;
        }

        if($by == 'by_title'){
            $where = " WHERE name LIKE '%$text%'";
        }
        else
            $where =" WHERE stars LIKE '%$text%'";

        $this->sql .= $where;
    }

    private function table($table)
    {
        $this->sql .=$table;
    }

    private function order($asc)
    {
        if($asc == "asc"){
            $this->sql .= " ORDER BY name";
        }
    }
}