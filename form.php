<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>My test page</title>
    
  </head>
  
  <body>
    <p>This is my page</p>
  

    <form action="thanks.php" method="post">
        <div>
            <label for="name"> Nom :</label>
            <input type="text" id="name" name="user_name" required>
           
        </div>
        <div>
            <label for="firstname"> Prénom :</label>
            <input type="text" id="firstname" name="user_firstname" required>
        </div>
        <div>
          <label for="tel"> Téléphone:</label>
          <input type="tel" id="tel" name="user_tel" required>
        </div>
        <div>
            <label for="email"> e-mail :</label>
            <input type="email" id="email" name="user_email" required>
        </div>
        <div>
          <label for="subject"> Choisir le sujet de votre message :</label>
          <select id="subject" name="user_subject" required>
            <option value="une question">Une question</option>
            <option value="Réclamation">Réclamation</option>
            <option value="Demande de rdv">Demande de rdv</option>
          </select>
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="message" name="user_message" required></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
     
    </form>
  
  </body>
</html>
