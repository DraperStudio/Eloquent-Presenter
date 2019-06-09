# Eloquent Presenter

[![Build Status](https://img.shields.io/travis/artisanry/Eloquent-Presenter/master.svg?style=flat-square)](https://travis-ci.org/artisanry/Eloquent-Presenter)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/artisanry/eloquent-presenter.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/artisanry/Eloquent-Presenter.svg?style=flat-square)](https://github.com/artisanry/Eloquent-Presenter/releases)
[![License](https://img.shields.io/packagist/l/artisanry/Eloquent-Presenter.svg?style=flat-square)](https://packagist.org/packages/artisanry/Eloquent-Presenter)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require artisanry/eloquent-presenter
```

## Usage

### Presenter
``` php
use Artisanry\Presenter\BasePresenter;

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
use Artisanry\Presenter\HasViewPresenterTrait;
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

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## License

Mozilla Public License Version 2.0 ([MPL-2.0](./LICENSE)).
