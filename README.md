# LEANEVENTO Website
## A website developed by Html/CSS, Javascript, Php and MySQL.

The EER Schema displayed as below,

![img](https://github.com/mangfu1231/lean/blob/master/image/EER.png)

The following illustrate the relation between tables in the schema and web pages,

* Home page
There is no table for the home page. The home page can be developed by HTML and CSS.
* About Us
There is no table for the About Us page either. It can be also developed by HTML and CSS. However, the subscription function at the bottom need Table Subscription, even this area does not belong to any specific page. The primary key of Table Subscription is ID, it is a standalone table.
* Blog
Blog page need the support of Table Support. ID is the primary key of the table. it is a standalone table as well.
* Buy from Us
Page Buy from Us needs Table Ticket, Register, Event and Transaction to develop. Primary key of Table Ticket is ID, the table needs other attributes, price and Quantity, to list the details of tickets. The Table Item has a M:N relation with Table Transaction. Table Transaction records the transactions about purchasing tickets selling by LEANEVENTO. Its primary key is ID, it also has a 1:N relation with register which is the buyer of ticket. Table Register is about all users/client of LEANEVENTO. The attribute email is the primary key. Individual, Business and Agent are the three types for this table. The attribute Perentage_assigned is specific for the type Agent to reflect a percentage sharing for ticket selling. Event is the table affix to ticket. One event is only corresponded to one tuple in Table Ticket. It has ID as its primary key. Additional information includes event name, location, image, time, a short description and type. The event type has only two options, free and paid.
* Contact Us
There is a standalone table, Table Contact_Us, for this page. ID is the primary key. Also, information name, phone, email and message is required for this table.
* Log in/Sign Up
The Log in and Sign Up pages share the same Table Register. Again, Table Register has three types, individual, business and agent. First name and last name for type individual and business are required fields. Bname is the required field for type agent. Email and password is required for all. Other fields are optional.
* Home Individual/Business
The page Home Individual and Business will display the events they have joined and events they will participate. Table Event is involved here. Table Event shows all the event took place in the past and the near future. ID is the primary key. Table Register and Event has a M:N relation to reflect the participant for each of events.
* Profile Individual/Business
The Profile Page shows information they registered. The individual and business owner are able to change the information in this page. The table in database involved is Register only.
* Home Agent
The Page Home Agent is the place agent is able to look up information about individual and business, mange events they want to get involved and check profile of them. Six subpages, Home, List Individual, List Business, List Event, Add Event and Profile are developed. The Home Subpage has nothing but a picture. List Individual/Business will show all registered individual or business respectively. The table involved is Table Register. The subpage can list them by type. Subpage List Event shows all events they got involved. Subpage Add Event can add events agent want to join. These two subpages need the support of relation Participate (relation Participate will be a table in database, although it shows as a relation in EER schema). Subpage Profile has the same function as Profile Individual/Business. Only Table Register is affected.
* Donation
A Donation Page might develop to trace all items donated by clients for tax purpose. The page involves Table Register and Donation. They have a 1:N relation. Attribute ID is the primary key for Table Donation. Item, Descript and Worth are three attributions for the details of donation items.
