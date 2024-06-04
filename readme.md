
# Dummy vs Stub vs Spy vs Mock

![image](https://github.com/DeGraciaMathieu/dummy-stub-spy-mock/assets/11473997/a22b8829-5dee-4b46-bd5e-8f6e2e46faf4)

The "System under test" (SUT) refers to the class being tested.

- Dummy: facilitates the instantiation of the SUT
- Stub: manipulates the indirect inputs of the SUT
- Spy and Mock: control and verify the indirect outputs of the SUT

Indirect inputs refer to the information that the SUT needs to function which cannot be supplied through its signature.

Indirect outputs refer to the information that cannot be verified through the signature provided.

![image](https://github.com/DeGraciaMathieu/dummy-stub-spy-mock/assets/11473997/27719da0-c04f-418c-89de-de6098294dae)
