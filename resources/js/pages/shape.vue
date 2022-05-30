<template>
  <div>
    <div class="is-flex is-justify-content-space-between is-align-items-center">
      <div class="is-flex is-flex-grow-1">
        <div class="buttons has-addons">
          <b-button rounded type="is-primary" size="is-medium">{{ $t('shape_select_dictionary') }}</b-button>
          <b-button rounded type="is-primary is-light" size="is-medium" >{{ $t('shape_add_dictionary') }}</b-button>
        </div>

      </div>
      <div class="is-flex is-align-content-end is-justify-content-end">
        <div class="buttons has-addons">
          <b-button rounded type="is-primary" size="is-medium">{{ $t('shape_select_ru_en') }}</b-button>
          <b-button rounded type="is-primary is-light" size="is-medium" >{{ $t('shape_select_en_ru') }}</b-button>
        </div>
      </div>
    </div>
    
    <div class="shape-tab  mt-5">
      <span class="is-size-4 has-text-weight-bold">
        <span class="shape-tabe-badge-text">Текущий словарь: Цитаты</span>
      </span>
    </div>
    <div class="shape-card card mt-3">
        <div class="columns is-gapless is-multiline is-mobile  is-0-tablet is-3-desktop is-8-widescreen is-2-fullhd">
          <div class="is-6 column shape-left-text-wrap">
            <div class="is-flex content p-4 is-flex-direction-column">
              <span class="is-size-5 has-text-weight-bold">  
                <span class="shape-badge-text-header-left">Русский</span>
              </span>
              <span class="is-size-2 has-text-weight-bold">
                <span class="shape-badge">Древо жизни</span>
              </span>
              <div class="shape-footer mt-3">
                <b-button rounded class="ml-2">
                  <b-icon
                    icon="volume-high">
                  </b-icon>
                </b-button>
                <b-button rounded class="ml-2">
                  {{ $t('shape_show_translation') }}
                </b-button>
              </div>
            </div>
          </div>
          <div class="is-6 column shape-right-text-wrap">
            <div class="is-flex content p-4 is-flex-direction-column">
              <span class="is-size-5 has-text-weight-bold"> 
                <span class="shape-badge-text-header-right">Английский</span>
              </span>
              <span class="is-size-2 has-text-weight-bold"> 
                <span class="shape-badge shape-right-text-wrap-hide">#############</span>
              </span>
              <div class="shape-footer mt-3">
                <b-button rounded disabled class="ml-2">
                  <b-icon
                    icon="volume-high">
                  </b-icon>
                </b-button>
                <b-button rounded class="ml-2">
                  {{ $t('shape_next_word') }}
                </b-button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'main',

  metaInfo () {
    return { title: this.$t('shape') }
  },

  data: () => ({
    title: window.config.appName
  }),

  computed: mapGetters({
    authenticated: 'auth/check'
  })
}
</script> 