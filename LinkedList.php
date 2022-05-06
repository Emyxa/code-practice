<?php

/**
 * Create and traverse linked list
 */
class Node
{
    public $data;
    public $next;
}

class LinkedList
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function traverseList()
    {
        $temp = $this->head;
        while (!is_null($temp)) {
            echo $temp->data . ' ';
            $temp = $temp->next;
        }
    }

    public function createHeadNode($data)
    {
        $node = $this->createNode($data);
        $this->linkNextNode($node, null);
        return $node;
    }

    public function createNode($data)
    {
        $node = new Node();
        $node->data = $data;

        return $node;
    }


    public function assignHead($headNode)
    {
        $this->head = $headNode;
    }

    public function linkNextNode(Node $firstNode, ?Node $nextNode)
    {
        $firstNode->next = $nextNode;
    }


}

// create an empty linked list
$list = new LinkedList();

// add first node
$head = $list->createHeadNode('I am head');
$list->assignHead($head);

// add second node
$secondNode = $list->createNode('Second Node');
$list->linkNextNode($head, $secondNode);

// third node
$thirdNode = $list->createNode('Third Node');
$list->linkNextNode($secondNode, $thirdNode);

// traverse and print list
$list->traverseList();

