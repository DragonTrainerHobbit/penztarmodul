<!DOCTYPE html>
<html>
  <head>
    <title>Pénztár</title>
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label, p {
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Arial, sans-serif;
      font-size: 16px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
 line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #006622;
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("/uploads/media/default/0001/02/e2502bb5e1dab7d5cc9b011c745033821aad632c.jpeg");
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2);
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
    }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #006622;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #006622;
      color: #006622;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #00b33c;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
 .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
  display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #006622;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #006622;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background:  #006622;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #00b33c;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }

      input[type=text] {
  width: 300px;
}

    </style>
  </head>
  <body>
    <div class="testbox" style="width:900px; height: 600px;margin:auto; ">
      <form>
        <div class="banner" style="background-color: green;">
          <h1>Pénztár</h1>
        </div>
        <br/>
        <fieldset>
          <legend>Adatfelvitel</legend>
          <div class="item">
            <label for="kvb">Ki vagy befizetés?</label> <br/>
            <input id="kvbinput" type="text" name="kvbinput" />
          </div>
          <div class="item">
            <label for="osszeg">Összeg</label><br/>
            <input id="osszeg" type="text" name="osszeg" />
          </div>
          <div class="item">
            <label for="jckod">Jogcím kód</label><br/>
            <input id="jckod" type="text" name="jckod" />
          </div>
          <div class="item">
            <label for="partnerkod">Partnerkód</label><br/>
            <input id="partnerkod" type="text" name="partnerkod" />
          </div>
          <div class="item">
            <label for="partnerkod">Tartozás</label><br/>
            <input id="partnerkod" type="text" name="partnerkod" />
          </div>
                   <div class="item">
            <label for="bdate">Tranzakció dátuma</label><br/>
            <input id="bdate" type="date" name="bdate" style="width: 300px;"/>
            <i class="fas fa-calendar-alt"></i>
          </div>

<span id="result"></span>
          <button type="calc" id="calc"  onclick="">Tranzakció</button>
        </div>
               </fieldset>
        <br/>
  </body>
</html>
