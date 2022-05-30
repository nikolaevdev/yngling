<template>
  <b-navbar class="py-2 px-3">
    <template #brand>
      <b-navbar-item tag="router-link" :to="{ path: '/' }">
        <img
          src="/images/web-logo.png"
          alt="Yngling"
          >
      </b-navbar-item>
    </template>

    <template #end>
      <b-navbar-item tag="div">
        <div class="buttons">
            <router-link :to="{ name: 'login' }" class="button is-primary">
              <strong>{{ $t('register') }}</strong>
            </router-link>
            <router-link :to="{ name: 'login' }" class="button is-light">
              <strong>{{ $t('login') }}</strong>
            </router-link>
            <LocaleDropdown></LocaleDropdown>
        </div>
      </b-navbar-item>
    </template>
  </b-navbar>
</template>

<script>
import { mapGetters } from 'vuex'
import LocaleDropdown from './LocaleDropdown'

export default {
  components: {
    LocaleDropdown
  },

  data: () => ({
    appName: window.config.appName
  }),

  computed: mapGetters({
    user: 'auth/user'
  }),

  methods: {
    async logout () {
      // Log out the user.
      await this.$store.dispatch('auth/logout')

      // Redirect to login.
      this.$router.push({ name: 'login' })
    }
  }
}
</script>

<style scoped>
.profile-photo {
  width: 2rem;
  height: 2rem;
  margin: -.375rem 0;
}

.container {
  max-width: 1100px;
}
</style>
