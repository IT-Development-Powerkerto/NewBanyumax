  // The DOM element you wish to replace with Tagify
  var input = document.querySelector('input[name=tags]');
  var tagify = new Tagify(input, {
    keepInvalidTags: true,
    whitelist: [  
    'Septiani Dwi Putri',
    'Noviana',
    'Hutari',
    'Nida,',
    'Diska',
    'Dhella',
    'Friska',
    'Nur Hayatun'

    ],
    hooks: {
      /**
       * Removes a tag
       * @param  {Array}  tags [Array of Objects [{node:..., data:...}, {...}, ...]]
       */
      beforeRemoveTag: (tags) => {
        tags[0].node.classList.add('tagify__tag');

        return new Promise((resolve, reject) => {
          confirm(`Apakah Kamu Yakin Ingin Menghapus ${tags[0].data.value} ?`)
            ? resolve()
            : reject();
        });
      },
    },
});