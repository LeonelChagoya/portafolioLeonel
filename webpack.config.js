'use strict';
var path = require('path');

module.exports = {
    //entrada de componentes
  entry: {
    'Customer/index': './app/components/src/customer/index.jsx',
    'Login/index': './app/components/src/Login/index.jsx',

  },
  

  //salida de componentes
  output: {
    path: path.resolve(__dirname, './public/dist'),
    filename: '[name].js'
  },
  mode: 'development',
  module: {
    rules: [
      {
        test: /\.js$|jsx/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-react']
          }
        }
      }
    ]

  }
}

// module.exports = {
//   mode: 'development',
//   devtool: 'source-map',
//   entry: {
//       'Customer/index': './app/components/src/customer/index.jsx',
//   },
//   output: {
//     path: path.resolve(__dirname, './public/dist'),
//      filename: '[name].js'
//   },
//   module: {
//       rules: [{
//          test: /\.js$|jsx/,
//           exclude: /node_modules/,
//           use: {
//               loader: "babel-loader"
//           }
//       }]
//   },
//   resolve: {
//       extensions: [".js", ".jsx"]
//   }
// };