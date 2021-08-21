'use strict';
(function() {
    var db = {
        loadData: function(filter) {
            return $.grep(this.clients, function(client) {
                return (!filter.Name || client.Name.indexOf(filter.Name) > -1)
                    && (!filter.Action || client.Action === filter.Action)
                    && (!filter.Addedby || client.Addedby.indexOf(filter.Addedby) > -1)
                    && (!filter.vendortype || client.vendortype === filter.vendortype)
                    && (filter.Married === undefined || client.Married === filter.Married);
            });
        },
        insertItem: function(insertingClient) {
            this.clients.push(insertingClient);
        },
        updateItem: function(updatingClient) { },

        deleteItem: function(deletingClient) {
            var clientIndex = $.inArray(deletingClient, this.clients);
            this.clients.splice(clientIndex, 1);
        }
    };
    window.db = db;
    db.countries = [
        { Name: "India", Id: 0 },
        { Name: "United States", Id: 1 },
        { Name: "Canada", Id: 2 },
        { Name: "United Kingdom", Id: 3 },
        { Name: "France", Id: 4 },
        { Name: "Brazil", Id: 5 },
        { Name: "China", Id: 6 },
        { Name: "Russia", Id: 7 }
    ];
    // db.clients = [
    //     {
    //         "Avatar": "../assets/images/dashboard/user5.jpg",
    //         "First Name": "Rowan",
    //         "Last Name": "Torres",
    //         "Email": "Rowan.torres@gmail.com",
    //         "Last Login": "6 Days ago",
    //         "Role": "Customer",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/user3.jpg",
    //         "First Name": "Alonzo",
    //         "Last Name": "Perez",
    //         "Email": "Perez.Alonzo@gmail.com",
    //         "Last Login": "2 Days ago",
    //         "Role": "Customer",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/user1.jpg",
    //         "First Name": "Skylar",
    //         "Last Name": "Lane",
    //         "Email": "Lane.Skylar@gmail.com",
    //         "Last Login": "1 Days ago",
    //         "Role": "Customer",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/boy-2.png",
    //         "First Name": "Brody",
    //         "Last Name": "Gray",
    //         "Email": "Gray.Brody@gmail.com",
    //         "Last Login": "3 Days ago",
    //         "Role": "Admin",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/designer.jpg",
    //         "First Name": "Colton",
    //         "Last Name": "Clay",
    //         "Email": "Colton.Clay@gmail.com",
    //         "Last Login": "1 Days ago",
    //         "Role": "Customer",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/user.png",
    //         "First Name": "Maxine",
    //         "Last Name": "Woters",
    //         "Email": "woters.maxine@gmail.com",
    //         "Last Login": "10 Days ago",
    //         "Role": "Customer",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/user3.jpg",
    //         "First Name": "Alonzo",
    //         "Last Name": "Perez",
    //         "Email": "Perez.Alonzo@gmail.com",
    //         "Last Login": "2 Days ago",
    //         "Role": "Customer",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/user1.jpg",
    //         "First Name": "Skylar",
    //         "Last Name": "Lane",
    //         "Email": "Lane.Skylar@gmail.com",
    //         "Last Login": "1 Days ago",
    //         "Role": "Customer",
    //     },
    //     // {
    //     //     "Avatar": "../assets/images/dashboard/boy-2.png",
    //     //     "First Name": "Brody",
    //     //     "Last Name": "Gray",
    //     //     "Email": "Gray.Brody@gmail.com",
    //     //     "Last Login": "3 Days ago",
    //     //     "Role": "Customer",
    //     // },
    //     {
    //         "Avatar": "../assets/images/dashboard/designer.jpg",
    //         "First Name": "Colton",
    //         "Last Name": "Clay",
    //         "Email": "Colton.Clay@gmail.com",
    //         "Last Login": "1 Days ago",
    //         "Role": "Admin",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/user.png",
    //         "First Name": "Maxine",
    //         "Last Name": "Woters",
    //         "Email": "woters.maxine@gmail.com",
    //         "Last Login": "10 Days ago",
    //         "Role": "Customer",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/user3.jpg",
    //         "First Name": "Alonzo",
    //         "Last Name": "Perez",
    //         "Email": "Perez.Alonzo@gmail.com",
    //         "Last Login": "2 Days ago",
    //         "Role": "Customer",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/user1.jpg",
    //         "First Name": "Skylar",
    //         "Last Name": "Lane",
    //         "Email": "Lane.Skylar@gmail.com",
    //         "Last Login": "1 Days ago",
    //         "Role": "Customer",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/boy-2.png",
    //         "First Name": "Brody",
    //         "Last Name": "Gray",
    //         "Email": "Gray.Brody@gmail.com",
    //         "Last Login": "3 Days ago",
    //         "Role": "Customer",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/designer.jpg",
    //         "First Name": "Colton",
    //         "Last Name": "Clay",
    //         "Email": "Colton.Clay@gmail.com",
    //         "Last Login": "1 Days ago",
    //         "Role": "Customer",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/user5.jpg",
    //         "First Name": "Rowan",
    //         "Last Name": "Torres",
    //         "Email": "Rowan.torres@gmail.com",
    //         "Last Login": "6 Days ago",
    //         "Role": "Customer",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/user3.jpg",
    //         "First Name": "Alonzo",
    //         "Last Name": "Perez",
    //         "Email": "Perez.Alonzo@gmail.com",
    //         "Last Login": "2 Days ago",
    //         "Role": "Admin",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/user1.jpg",
    //         "First Name": "Skylar",
    //         "Last Name": "Lane",
    //         "Email": "Lane.Skylar@gmail.com",
    //         "Last Login": "1 Days ago",
    //         "Role": "Customer",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/boy-2.png",
    //         "First Name": "Brody",
    //         "Last Name": "Gray",
    //         "Email": "Gray.Brody@gmail.com",
    //         "Last Login": "3 Days ago",
    //         "Role": "Admin",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/designer.jpg",
    //         "First Name": "Colton",
    //         "Last Name": "Clay",
    //         "Email": "Colton.Clay@gmail.com",
    //         "Last Login": "1 Days ago",
    //         "Role": "Customer",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/user.png",
    //         "First Name": "Maxine",
    //         "Last Name": "Woters",
    //         "Email": "woters.maxine@gmail.com",
    //         "Last Login": "10 Days ago",
    //         "Role": "Customer",
    //     },
    //     {
    //         "Avatar": "../assets/images/dashboard/user3.jpg",
    //         "First Name": "Alonzo",
    //         "Last Name": "Perez",
    //         "Email": "Perez.Alonzo@gmail.com",
    //         "Last Login": "2 Days ago",
    //         "Role": "Customer",
    //     },

    // ];
 
}());
