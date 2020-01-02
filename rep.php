<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
  #jb-container {
    margin: 10px auto;
    padding: 20px;
    border: 1px solid #bcbcbc;
  }
  #jb-header {
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid #bcbcbc;
  }
  #jb-content {
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid #bcbcbc;
  }
  #jb-sidebar {
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid #bcbcbc;
  }
  #jb-footer {
    padding: 20px;
    border: 1px solid #bcbcbc;
  }
  @media ( min-width: 481px ) {
    #jb-container {
      width: 940px;
    }
    #jb-content {
      width: 580px;
      float: left;
    }
    #jb-sidebar {
      width: 260px;
      float: right;
    }
    #jb-footer {
      clear: both;
    }
  }
</style>
  </head>
  <body>
    <div id="jb-container">
      <div id="jb-header">
        <h1>Responsive Layout</h1>
      </div>
      <div id="jb-content">
        <h2>Content</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec mollis nulla. Phasellus lacinia tempus mauris eu laoreet. Proin gravida velit dictum dui consequat malesuada. Aenean et nibh eu purus scelerisque aliquet nec non justo. Aliquam vitae aliquet ipsum. Etiam condimentum varius purus ut ultricies. Mauris id odio pretium, sollicitudin sapien eget, adipiscing risus.</p>
      </div>
      <div id="jb-sidebar">
        <h2>Sidebar</h2>
        <ul>
          <li>Lorem</li>
          <li>Ipsum</li>
          <li>Dolor</li>
        </ul>
      </div>
      <div id="jb-footer">
        <p>Copyright</p>
      </div>
    </div>
  </body>
</html>