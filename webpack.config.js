module.exports = {
  entry: "./src/js/index.js",
  mode: "development",
  // mode: "production",
  devtool: "inline-source-map",
  watch: true,
  watchOptions: {
    ignored: "/node_modules/",
  },
  output: {
    path: __dirname + "/dist/js",
    filename: "main.js",
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader", //loader名
          options: {
            presets: ["@babel/preset-env"],
          },
        },
      },
    ],
  },
};
