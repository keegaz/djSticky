
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91856121-1', 'auto');
  ga('send', 'pageview');

  // Firebase
  
 src="https://www.gstatic.com/firebasejs/3.7.1/firebase.js"
 src="https://apis.google.com/js/platform.js" 


  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAUge3ixmWZ7qhR167vka5cRohOove_280",
    authDomain: "webquickstart-e650c.firebaseapp.com",
    databaseURL: "https://webquickstart-e650c.firebaseio.com",
    storageBucket: "webquickstart-e650c.appspot.com",
    messagingSenderId: "377523934647"
  };
  firebase.initializeApp(config);


  var provider = new firebase.auth.GoogleAuthProvider();


  //Google SignIn
  function signIn()
  
  {
          firebase.auth().signInWithPopup(provider).then(function(result)
          {
      // This gives you a Google Access Token. You can use it to access the Google API.
      var token = result.credential.accessToken;
      // The signed-in user info.
      var user = result.user;
      window.alert(user);
      // ...
    }).catch(function(error) {
      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message;
      // The email of the user's account used.
      var email = error.email;
      // The firebase.auth.AuthCredential type that was used.
      var credential = error.credential;
      // ...
    });
      
  }