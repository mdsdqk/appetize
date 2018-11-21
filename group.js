angular.module("creategroupapp",[])
.controller("MainCtrl",['$http', function($http)
{
    self = this;
   // this.message = "Hello,this is created by salam";
    console.log("MainCtrl instantiated");

    // object to hold all the selected group members
    self.group_obj = {
        "number":0,
        // "friends":[]
    }

    // function which fills in the object with users.
    // when ever a user is clicked.
    self.create_request_acharya = function(x)
    {
        // alert(x);
        id_obj = {"uid":"0"};
        location_obj = {"lat":0,"long":0};
        preference_obj = {"cuisines":0};

        id_obj.uid = x.user_id;
        location_obj.lat = x.latitude;
        location_obj.long = x.longitude;

        cuisines_array = [];
        cuisines_array = x.cuisines.split(',');
        // alert(cuisines_array[0]);
       
        preference_obj.cuisines = cuisines_array;
        // alert(preference_obj.cuisines);

        temp_obj = {"id":{},"location":{},"preferences":{}};
        temp_obj.id = id_obj;
        temp_obj.location = location_obj;
        temp_obj.preferences = preference_obj;

        // incriment the number count here
        self.group_obj.number = self.group_obj.number+1;
        self.group_obj["user"+self.group_obj.number] = temp_obj;
        // alert(self.group_obj);

    };

    // which calles the php and fetches ALL(not friends of the user) the users from the db.
    self.fetch_friends = function()
    {

        $http.get("http://localhost/SE_Project/get_friends.php").then(function(response)
        {
            console.log(response);
            ret_array = response.data;
            // alert(ret_array);  //9 objects

            // whats the shape of this array? its an object of json array
            // creating my own array here
            /*
            (user_id | email| password | username| latitude|longitude|diet|cuisines|friends)
            ret_array = [
                {name:"salam"},
                {name:"shoeb"}
            ];*/

            self.user_array = ret_array;

            $http.ch_bg = {
                'background-color': '#608dfd'
            };

        }, function(error)
        {
            console.log(error);
        });                             
    };


    // sends the object which has all the user details to recommend
    // php fires the object to acharyas api and fetches resto ids and baised on the
    // resto ids it fetches the info of those restos from the db and 
    // echo it here which is recieved in the response.data
    // and then we give that json array of object to the angular json array of object
    //  which then automatically updates the ui.

    self.fetch_recomendations = function()
    {
        // alert(self.group_obj.friends[0].name);
        //this post is to fetching restaurants  from acharyas api
        $http.post("http://localhost/SE_Project/get_recomendation.php",self.group_obj).then(function(response)
        {
            //get only restos id here and now update the restaurants_obj from whatever harshit gives
            console.log(response);
            //alert(response.data);
            ret_array = response.data;                
            // update the divs in the ui
            self.restaurant_array = ret_array


            // change button color so that its feels like its clicked.
            // 'background-color': '#797979'
            // self.document.getElementById('recomend_load').style.background='#797979'
            // $http.divObj = {
                // 'background-color': '#f6f6f6'
            // };

        }, function(error)
        {
            console.log(error);
        });                             
    }

}]);