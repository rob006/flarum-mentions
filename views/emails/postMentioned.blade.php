Witaj {!! $user->username !!}!

{!! $blueprint->reply->user->username !!} odpowiedział(a) na Twój post (#{!! $blueprint->post->number !!}) w {!! $blueprint->post->discussion->title !!}.

{!! app()->url() !!}/d/{!! $blueprint->reply->discussion_id !!}/{!! $blueprint->reply->number !!}

---

{!! $blueprint->reply->content !!}
