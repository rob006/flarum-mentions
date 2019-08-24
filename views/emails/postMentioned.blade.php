Witaj {!! $user->display_name !!}!

{!! $blueprint->reply->user->display_name !!} odpowiedział na twój post (#{!! $blueprint->post->number !!}) w {!! $blueprint->post->discussion->title !!}.

{!! app()->url() !!}/d/{!! $blueprint->reply->discussion_id !!}/{!! $blueprint->reply->number !!}

---

{!! $blueprint->reply->content !!}
