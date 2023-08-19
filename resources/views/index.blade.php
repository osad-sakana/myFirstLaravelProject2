<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KEIJI-BAN 3rd</title>
  </head>
  <body>
    <header>
      <h1>KEIJI-BAN 3rdにようこそ</h1>
    </header>
    <main>
      <form method="POST">
        {{ csrf_field() }}
        <input type="text" name="name" placeholder="名前を入力してください" style="display: block; width: 100%;">
        <textarea name="content" rows="5" placeholder="コンテンツを入力してください" style="display: block; width: 100%;"></textarea>
        <input type="submit" value="送信" style="display: block; width: 100%;">
      </form>

      @forelse ( $topics as $topic )
        <div style="margin: 10px">
          <h2>名前: {{ $topic->name }}</h2>
          <p>内容: {!! nl2br(e( $topic->content ))  !!}</p>
          <p>時間: {{ $topic->created_at }}</p>
        </div>
      @empty
        <p>投稿はありません</p>
      @endforelse
    </main>
  </body>
</html>