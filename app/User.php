<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use File;
use Image;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'username', 'email', 'password', 'is_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setAvatarAttribute($value)
    {
        // handle the user upload of avatar
        if ($value->hasFile('avatar')) {
            $avatar = $value->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
        
            // delete current image linked to user before uploading new image
            if ($this->avatar !== 'default.png') {
                $file = 'uploads/avatars/' . $this->avatar;
        
                if (File::exists($file)) {
                    unlink($file);
                }
            }
        
            Image::make($avatar)->resize(300, 300)->save('uploads/avatars/' . $filename);
            $this->attributes['avatar'] = $filename;
        }
    }
}
