
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;

    }
    .header{
      color:  #007bff;
    }
    .header-title{
      font-weight: bolder;
    }
    .title{
      margin-bottom: 30px;

    }
    .container-item{
      max-width: 1100px;
      padding: 20px;
      margin: 0 auto;

    }
    .container-items {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 20px;

    }
    .item{
      background: #f1f1f1;
      border-radius: 10px;
      overflow: hidden;
      max-width: 400px;
      box-shadow: 10px 10px 10px rgba(0,0,0,0.1);
    }


    .img{
      width:100%;
      height: 150px;
    }
    .title-item{
      padding: 10px 20px;
      display: flex;
      flex-direction: column;
      /* align-items: center; */
      justify-content: space-between;
      min-height: 50px;
      gap: 20px;
      /* align-: space-between; */
    }

    p {
      font-size: 18px;
      font-weight: bold;
    }
    a{
      color: white;
    }

    .btn-deskripsi {
      padding: 10px 20px;
      width: 100%;
      font-size: 16px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }

    .btn-deskripsi:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <section class="container-title">

    </section>
    <section class="container-item">
      <div class="title">
        <h5 class='header'>CATEGORY</h5>
        <h1 class='header-title'>Find your perfect bed here</h1>
      </div>

      <div class="container-items">
        @foreach ($queryBuilder as $data)
        <div class="item">
          <img class='img' src="https://picsum.photos/{{rand(100,200)}}/203" alt="">
          <div class="title-item">
            <p>{{$data -> name}}</p>
            <button class='btn-deskripsi'><a href="{{url('/kategori/0')}}">Deskripsi</a></button>
          </div>
        </div>
        @endforeach
      </div>

    </section>
  </div>
</body>
</html>
