<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH挑戦状</title>
</head>

<body>


  @section('content')



  <div class="box">
    <form action="/contact/create" method="POST">
      @csrf

      <div class="card">
        <p class="title">お問い合わせ</p>




        <div class="contact">



          <div class="fullname">





            <tr>

              <td>お名前 ※</td>
              <th>

                <input type="txet" class="input-add" name="fullname" value="{{old('fullname')}}">
              </th>
              <th>

                <input type="txet" class="input-add" name="fullname" value="{{old('fullname')}}">
              </th>

              <p>例）山田</p>
              <p>例）太郎</p>
            </tr>


            @if ($errors->has('fullname'))
            <tr>
              <th>ERROR</th>
              <td>
                {{$errors->first('fullname')}}
              </td>
            </tr>
            @endif
            @if ($errors->has('fullname'))
            <tr>
              <th>ERROR</th>
              <td>
                {{$errors->first('fullname')}}
              </td>
            </tr>
            @endif
          </div>


          <div class=" gender">
            <tr>
              <td>性別 ※</td>
              <input type="radio" name="gender" value="male">男性
              <input type="radio" name="gender" value="female">女性
            </tr>
          </div>

          <div class="email">
            <tr>
              <td>メールアドレス ※</td>

              <input type="email" class="email" name="email" value="{{old('email')}}">

              <p>例）test@example.com</p>
            </tr>


            @if ($errors->has('email'))
            <tr>
              <th>ERROR</th>
              <td>
                {{$errors->first('email')}}
              </td>
            </tr>
            @endif
          </div>

          <div class="postcode">
            <tr>
              <td>郵便番号 ※</td>

              <input type="txet" class="" name="postcode" value="{{old('postcode')}}">

              <p>例）123-456</p>
            </tr>
            @if ($errors->has('postcode'))
            <tr>
              <th>ERROR</th>
              <td>
                {{$errors->first('postcode')}}
              </td>
            </tr>
            @endif
          </div>

          <div class="address">
            <tr>
              <td>住所 ※</td>

              <input type="txet" class="" name="address" value="{{old('address')}}">

              <p>例）東京都渋谷千駄ヶ谷1-2-3</p>
            </tr>
            @if ($errors->has('address'))
            <tr>
              <th>ERROR</th>
              <td>
                {{$errors->first('address')}}
              </td>
            </tr>
            @endif
          </div>

          <div class="buil">
            <tr>
              <th>建物名</th>

              <input type="txet" class="" name="building_name" value="{{old('building_name')}}">

              <p>例） 千駄ヶ谷マンション101</p>
            </tr>
          </div>

          <div class="opinion">
            <tr>
              <td>ご意見 ※</td>

              <textarea name="opinion" id="" cols="30" rows="10"></textarea>



            </tr>
            @if ($errors->has('opinion'))
            <tr>
              <th>ERROR</th>
              <td>
                {{$errors->first('opinion')}}
              </td>
            </tr>
            @endif
          </div>
          <!-------end.opinion-------->
          <input type="submit" class="button" value="確認">
        </div>
        <!-------end.contact---------->

      </div>
      <!--------end.card---------->
    </form>

  </div>
  <!-----end.box------->
</body>

</html>