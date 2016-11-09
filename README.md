# Eloquent Presenter

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/eloquent-presenter
```

## Usage

### Presenter
``` php
use BrianFaust\Presenter\BasePresenter;

class CommentPresenter extends BasePresenter
{
    public function getRoutePrefix()
    {
        return 'users.posts.invoices';
    }

    public function getRouteParameters()
    {
        // The ID of the model will be automatically attached to this array at the end
        // [
        //     $model->post->user->id,
        //     $model->post->id,
        //     $model->id // "id" is what is specified in $this->getRouteKeyName()
        // ];
        
        return ['post.user.id', 'post.id'];
    }
}
```

### Model
```php
use BrianFaust\Presenter\HasViewPresenterTrait;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasViewPresenterTrait;

    /**
     * Get the view presenter for the model.
     *
     * @return string
     */
    protected function getPresenter()
    {
        return UserPresenter::class;
    }
}
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

The [The MIT License (MIT)](LICENSE). Please check the [LICENSE](LICENSE) file for more details.
