### Usage

Sometimes we want to be able to to write an interface that uses an array like this:

    array(
      "User",
      "Name",
      "First" => "FirstName",
      "Last" => "LastName"
    );

and get the responding array ```["User", "Name", "First", "Last"]```

introducting ```array_keys_or_values()``` it does just this.
