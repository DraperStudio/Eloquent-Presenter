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
        return 'users.posts.comments';
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

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
