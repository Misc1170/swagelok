document.addEventListener("DOMContentLoaded", () => {

    let searchForm = document.querySelector('#search-form');

    searchForm.addEventListener('submit', (e) => {
        let searchField = document.querySelector('#default-search');
        let searchingString = searchField.value;

        e.preventDefault()


        let option = {
            "task": "updateFilter",
            "props": {
                "view": ["form_materials", "connect_size_1", "connect_size_2", "connect_type_1", "connect_type_2"],
                "search": 'SS-4-P-RT'
                // "search": searchingString
            }
            // 'task': 'updateTable',
            // 'props': {
            //     "level": 0,
            //     "SeriaId": "_17",
            //     "tableId": 6,
            //     "offset": 5,
            //     "limit": 10,
            //     "sort": false,
            //     "filter": {
            //         'view': ["form_materials", "connect_size_1", "connect_size_2", "connect_type_1", "connect_type_2"],
            //         'search': 'ss',
            //     }
            // }
        }
        // console.log(option);

        fetch('http://localhost:3000/', {
            method: 'post',
            headers: {
                'Content-Type': 'application/json;charset=utf-8',
            },
            body: option
            // body: JSON.stringify(option)
        }).then((response) => {
            alert(response.status);
            console.log(response);
            return response;
        }).then(result => console.log(result));

    });

});
