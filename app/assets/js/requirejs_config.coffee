require.config(
  baseUrl: '/js'
  paths:
    jquery: [
      "http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min"
      "lib/jquery"
    ]
    app_modules: 'app_bundle'
  deps: ['app_modules']
)