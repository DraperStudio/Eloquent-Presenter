# Eloquent Presenter

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/eloquent-presenter
```

## Usage

### Presenter
``` php
use BrianFaust\Presenter\Presenter;

class UserPresenter extends Presenter
{
    public function fullName()
    {
        return $this->first . ' ' . $this->last;
    }

    public function accountAge()
    {
        return $this->created_at->diffForHumans();
    }
}
```

### Model
```php
use BrianFaust\Presenter\PresentableTrait;
use Illuminate\Database\Model;

class User extends Model
{
    use PresentableTrait;

    protected $presenter = \App\UserPresenter::class;

}
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

The [The MIT License (MIT)](LICENSE). Please check the [LICENSE](LICENSE) file for more details.
