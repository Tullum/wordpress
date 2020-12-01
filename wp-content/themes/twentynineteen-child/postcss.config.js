module.exports = {
    module: {
      rules: [
        {
          test: /\.css$/,
          use: ["style-loader", "css-loader", "postcss-loader"]
        }
      ]
    }
  }

  module.exports = {
    plugins: [
      require('autoprefixer')
    ]
  }

  module.exports = {
  plugins: [
    require('autoprefixer')
  ]
}