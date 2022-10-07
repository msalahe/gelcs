<template>

    <div class="card card-preview">
        <div class="card-inner">
            <table class="datatable-init-export nowrap table">
                <thead>
                    <tr>
                        <th>L'année Scolaire</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="year in years">
                        <td>{{ year.name_year }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</template>
<script>

export default {
    data() {
        return {
            years: {}
        }
    },
    created() {
        axios.get("http://127.0.0.1:8000/years")
            .then(response => {
                console.log(response)
                this.years = response.data;
            })
            .catch(err => console.log(err));
    },
    mounted() {

    }

}

</script>