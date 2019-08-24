Witaj {!! $user->display_name !!}!

{!! $blueprint->post->user->display_name !!} wspomniał o tobie w poście w {!! $blueprint->post->discussion->title !!}.

{!! app()->url() !!}/d/{!! $blueprint->post->discussion_id !!}/{!! $blueprint->post->number !!}

---

{!! $blueprint->post->content !!}
