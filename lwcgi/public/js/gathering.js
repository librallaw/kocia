/**
 * A Javascript module to keep list (and count) of online users in a Firebase web app - by isolated rooms or globally.
 *
 * Initial idea from - http://stackoverflow.com/a/15982583/228648
 *
 * @url : https://gist.github.com/ajaxray/17d6ec5107d2f816cc8a284ce4d7242e
 * @auther : Anis Uddin Ahmad <anis.programmer@gmail.com>
 *
 * w:ajaxray.com | t:@ajaxray
 */
var Gathering = (function() {

    var randomName = function () {
        return Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
    };

    function Gathering(databaseReference, roomName) {

        this.db = databaseReference;
        this.roomName = roomName || 'globe';

        this.room = this.db.ref("gatherings/" + encodeURIComponent(this.roomName));
        this.myName = '';
        this.user = null;

        this.join = function(uid, displayName) {
            if(this.user) {
                console.error('Already joined.');
                return false;
            }

            this.myName = displayName || 'Anonymous - '+ randomName();
            this.user = uid ? this.room.child(uid) : this.room.push();

            // Add user to presence list when online.
            var self = this;
            var presenceRef = this.db.ref(".info/connected");
            presenceRef.on("value", function(snap) {
                if (snap.val()) {
                    self.user.onDisconnect().remove();
                    self.user.set(self.myName);
                }
            });

            return this.myName;
        };

        this.leave = function() {
            this.user.remove();
            this.myName = '';
        };

        this.over = function () {
            this.room.remove();
        };

        this.onUpdated = function (callback) {
            if('function' == typeof callback) {
                this.room.on("value", function(snap) {
                    callback(snap.numChildren(), this.array_unique(snap.val()));
                });
            } else {
                console.error('You have to pass a callback function to onUpdated(). That function will be called (with user count and hash of users as param) every time the user list changed.');
            }
        };


        this.array_unique = function (myObject){


            var array = Object.keys(myObject);

            var outputArray = {};

            // Count variable is used to add the
            // new unique value only once in the
            // outputArray.
            var count = 0;

            // Start variable is used to set true
            // if a repeated duplicate value is
            // encontered in the output array.
            var start = false;

            for (j = 0; j < array.length; j++) {
                for (k = 0; k < outputArray.length; k++) {
                    if ( array[j] == outputArray[k] ) {
                        start = true;
                    }
                }
                count++;
                if (count == 1 && start == false) {
                    var kkk = array[j];

                    //console.log(kkk);
                    outputArray[kkk] = myObject[kkk];

                }
                start = false;
                count = 0;
            }
            return outputArray;





        }
    }

    return Gathering;
})();