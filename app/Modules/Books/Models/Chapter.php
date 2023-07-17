<?php

declare(strict_types=1);

namespace App\Modules\Books\Models;

use Tempest\Interfaces\Model;
use Tempest\ORM\BaseModel;

class Chapter implements Model
{
    use BaseModel;

    public Book $book;

    public string $title;

    public string $contents;
}
