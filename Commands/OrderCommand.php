<?php 

class OrderCommand extends Command
{
    protected $name = 'order';
    protected $description = 'Команда выводит данные по заказу';
    protected $usage = '/order <номер_заказа>';
    protected $version = '1.0.0';
    protected $enabled = true;
    protected $public = true;

    public function execute()
    {
        $update = $this->getUpdate();
        $message = $this->getMessage();

        $chat_id = $message->getChat()->getId();
        $text = $message->getText(true);
        $text = is_numeric($text) ? (int)$text : false;

        if($text){
            $order = $text;
            $reply = print_r($order, true);
        } else {
            $reply = 'Номер заказа указан не правильно. Использование: ' . $this->usage;
        }

        $data = array();
        $data['chat_id'] = $chat_id;
        $data['text'] = $reply;

        $result = Request::sendMessage($data);
        return $result;
    }
}
 ?>