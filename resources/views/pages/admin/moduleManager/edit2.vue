<template>
  <Card>
    <template v-slot:header>
      <h5>LIST METHOD EXAMPLE</h5>
    </template>
    <template v-slot:default>
      <div class="table-responsive scrollbar">
        <table class="table">
          <thead>
          <tr>
            <th scope="col">Field Name</th>
            <th scope="col">Sortable</th>
            <th scope="col">filterable</th>
            <th scope="col">fieldType</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>
              <input class="form-control"
                     id="exampleFormControlInput1"
                     type="email"
                     placeholder="field name"
                     value="name"
              />
            </td>
            <td class="td-v-center">
              <div class="form-check mb-0 ">
                <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" />
                <label class="form-check-label" for="flexCheckDefault">Sortable</label>
              </div>
            </td>
            <td class="td-v-center">
              <div class="form-check mb-0 ">
                <input class="form-check-input" id="filterable" type="checkbox" value="" />
                <label class="form-check-label" for="filterable">Filterable</label>
              </div>
            </td>
            <td class="">
              <button class="btn btn-sm btn-outline-primary rounded-pill me-1 mb-1" type="button">Capsule Regular</button>
            </td>
          </tr>

          </tbody>
        </table>
      </div>
    </template>
  </Card>
</template>

<script>

export default {}
</script>

<style scoped>
  .td-v-center{
    vertical-align: middle;
  }
</style>
