<?php
class ListNode
{
    public $data = '';
    public $next = null;


    public function __construct(string $data = null)
    {
        $this->data = $data;
    }
}
class LinkedList
{
    public $first_node = null;

    public function insert($data)
    {
        $node = new ListNode($data);
        if ($this->first_node == null) {
            $this->first_node = $node;
        } else {
            $currentNote = $this->first_node;
            while ($currentNote->next !== null) {
                $currentNote = $currentNote->next;
            }
            $currentNote->next = $node;
        }
    }
}
$lk =  new LinkedList();
$lk->insert("trung");
$lk->insert("hung");
$lk->insert("tam");
$lk->insert("khanh");


echo "<pre>";
print_r($lk);

echo "</pre>";
