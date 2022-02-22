<?php


namespace App\classes;


class FileUpload
{
    protected $productId;
    protected $productid;
    protected $productName;
    protected $description ;
    protected $price;
    protected $value;
    protected $imageName;
    protected $imageDirectory;
    protected $imagePath;
    protected $imageFile;
    protected $filePath;
    protected $file;
    protected $data;
    protected $array;
    protected $array1;
    protected $array2;


    public function __construct($post=null, $file=null)
    {
        if($post)
        {
            $this->productId = $post['pid'];
            $this->productName = $post['products'];
            $this->description  = $post['description'];
            $this->price = $post['price'];
            $this->value= $post;
        }
        if($file)
        {
            $this->imageFile = $file['img'];

        }

    }
    public function index()
    {
        $this->imagePath = $this->imageUpload();
        $this->filePath = 'db/db.txt';
        $this->file=fopen($this->filePath, 'a');
        $this->data = "$this->productId, $this->productName, $this->description,$this->price,$this->imagePath$";

        fwrite($this->file, $this->data);
        fclose($this->file);
        return 'Data saved Successfully';


    }
    protected function imageUpload()
    {
        $this->imageName = time().$this->imageFile['name'];
        $this->imageDirectory = 'assets/img/upload/'.$this->imageName;
        move_uploaded_file($this->imageFile['tmp_name'], $this->imageDirectory);
        return $this->imageDirectory;
    }
    public function getAllProductInfo()
    {
        $this->filePath='db/db.txt';
        $this->data= file_get_contents($this->filePath);
        $this->array= explode('$', $this->data);

        foreach ($this->array as $key=> $value)
        {
            $this->array2= explode(',', $value);

            if($this->array2[0])
            {
                $this->array1[$key]['productId'] = $this->array2[0];
                $this->array1[$key]['productName'] = $this->array2[1];
                $this->array1[$key]['description'] = $this->array2[2];
                $this->array1[$key]['price'] = $this->array2[3];
                $this->array1[$key]['image'] = $this->array2[4];

            }


        }
        return $this->array1;

    }
    public function getAllProductInfoForOrder($productid)
    {
        $this->filePath='db/db.txt';
        $this->data= file_get_contents($this->filePath);
        $this->array= explode('$', $this->data);

        foreach ($this->array as $key=> $value)
        {
            $this->array2= explode(',', $value);

            if($this->array2[0])
            {
                if($this->array2[0] == $productid)
                {
                    $this->array1[$key]['productId'] = $this->array2[0];
                    $this->array1[$key]['productName'] = $this->array2[1];
                    $this->array1[$key]['description'] = $this->array2[2];
                    $this->array1[$key]['price'] = $this->array2[3];
                    $this->array1[$key]['image'] = $this->array2[4];
                }

            }


        }
        return $this->array1;

    }



}