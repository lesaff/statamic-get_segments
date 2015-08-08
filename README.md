# statamic-get_segments
Statamic Get URL Segments Modifier

## Installation
Rename folder to `get_segments` and copy to your `_add-ons` folder

## Usage
Let's say you have a field titled `url`. 
The value of that field is `http://www.instagram.com/justinbieber/blah`

`{{ url|get_segments:1 }}` will get you `justinbieber`

`{{ url|get_segments:2 }}` will get you `blah`
