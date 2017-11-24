<div class="feedback">
	<h3>Обратная связь</h3>
	<p>Отправьте сообщение, и я отвечу вам.</p>
	<form action="{{ route('feedbackPost') }}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-xs-6">
                <input type="text" name="name" placeholder="Ваше имя">
            </div>
            <div class="col-xs-6">
                <input type="text" name="email" placeholder="Ваш E-mail">
            </div>
            <div class="col-xs-12">
                <textarea rows="3" type="text" name="message" placeholder="Сообщение"></textarea>
                <button type="submit" class="btn btn-primary">Отправить сообщение <i class="fa fa-send-o"></i></button>
            </div>
        </div>
    </form>
</div>
