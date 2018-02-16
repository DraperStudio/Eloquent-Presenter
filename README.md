# Eloquent Presenter

[![Build Status](https://img.shields.io/travis/faustbrian/Eloquent-Presenter/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Eloquent-Presenter)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/eloquent-presenter.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Eloquent-Presenter.svg?style=flat-square)](https://github.com/faustbrian/Eloquent-Presenter/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Eloquent-Presenter.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Eloquent-Presenter)

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

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
