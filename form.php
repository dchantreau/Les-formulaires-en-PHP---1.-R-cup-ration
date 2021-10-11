<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
     <form  action="/thanks.php"  method="post">

    <div>
      <label  for="name">Nom :</label>
      <input  type="text" id='name' name="user_name">
    </div>

    <div>
    <label  for="firstname">Prénom :</label>
      <input  type="text" id='firstname' name="user_firstname">
    </div>

    <div>
      <label  for="courriel">Email: </label>
        <input  type="email" id = 'courriel' name="user_email" >
    </div>

    <div>
      <label  for="phone">Number :</label>
      <input  type="number" id ='phone' name="user_phone" >
    </div>

    <div>
    <label for="subject" >Choose a subject:</label>
    <select id="animals" name="animalSubject" >
      <option value="chat">Chat</option>
      <option value="chien">Chien</option>
      <option value="poisson rouge">Poisson rouge</option>
      <option value="serpent">Serpent</option>
    </select>
    </div>

    <div>
      <label  for="sms" >Message :</label>
      <textarea id = "sms" name="user_message" ></textarea>
    </div>

    <div  class="button">
      <button type="submit">Envoyez votre message</button>
    </div>

  </form>
  </body>
</html>

